<?php

namespace App\Http\Controllers;

use App\News;
use App\Renter;

/**
 * Класс для работы с основными страницами сайта
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    /**
     * Отображение главной страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHome()
    {
        $posts = News::paginate(6);

        // Получаем контент страницы и выводим
        return view('index', compact('posts'));
    }

    /**
     * Отображение страницы о нас
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAbout()
    {
        // Получаем контент страницы и выводим
        return view('about');
    }


    public function postNewsAdd()
    {
        if (\Auth::user()->is_admin) {
            $validator = \Validator::make(request()->all(), [
                'title' => 'required|max:255',
                'text'  => 'required',
                'image' => 'image|mimes:jpeg,png,jpg',
            ], [
                'title.required' => 'Пожалуйста, укажите название новости',
                'title.max'      => 'Название новости не может быть больше 255 символов',
                'text.required'  => 'Пожалуйста, укажите текст новости',
                'image.image'    => 'Пожалуйста, выберите изображение',
                'image.mimes'    => 'Допустимые форматы изображений: jpeg, png, jpg',
            ]);

            if ($validator->fails()) {
                return back()
                    ->with('alert', ['title' => 'Упс', 'message' => $validator->errors()->first()])
                    ->withInput();
            } else {
                $post = new News;
                $post->title = request()->get('title');
                $post->text = request()->get('text');
                $post->datetime = date('Y-m-d H:i:s');
                if (request()->file('image')) {
                    $image = request()->file('image');
                    $image_name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/news');
                    $image->move($destinationPath, $image_name);
                    $post->image_url = $image_name;
                }
                $post->save();

                return back()->with('alert', ['title' => 'Успех!', 'message' => 'Новость успешно добавлена!']);
            }
        } else {
            return back();
        }
    }

    public function getNewsRemove($id)
    {
        $post = News::find($id)->first();
        if ($post !== null) {
            News::destroy($id);

            return back()->with('alert', ['title' => 'Успех!', 'message' => 'Новость успешно удалена!']);
        } else {
            return back();
        }
    }
}