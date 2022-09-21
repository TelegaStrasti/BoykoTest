<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Контроллер для всего (понимаю что это очень плохая практика, не SOLID так сказать, иначе я не умею,
 * а сильно подсматривать я не хотел)
 */

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('index', ['news' => $news]);
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Логика добавления новости (create)
     *
     * @return RedirectResponse
     */

    public function store()
    {
        $news = request()->validate([
            'name' => 'string',
            'description' => 'string',
        ]);
        News::create($news);
        return redirect()->route('index');
    }

    /**
     * Реализация чтения новости (read)
     *
     * @param News $news
     * @return Application|Factory|View
     */
    public function show(News $news)
    {
        return view('show', ['news' => $news]);
    }

    public function edit(News $news)
    {
        return view('edit', ['news' => $news]);
    }

    /**
     * Логика изменения новости (update)
     *
     * @param News $news
     * @return RedirectResponse
     */

    public function update(News $news)
    {
        $tiding = request()->validate([
            'name' => 'string',
            'description' => 'string',
        ]);
        $news->update($tiding);
        return redirect()->route('index');
    }

    /**
     * Удаление новости (delete)
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function delete(News $news)
    {
        $news->delete();
        return redirect()->route('index');
    }

}
