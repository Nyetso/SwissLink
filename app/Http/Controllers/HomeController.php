<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => null,
        ]);

        return redirect()->route('/');
    }

    public function show(News $news)
    {
        $news = News::query()->get();
        return view('show', [
            'news' => $news,
        ]);
    }

    public function edit(News $news)
    {
        return view('edit', [
            'news' => $news,
        ]);
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $news->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('home.index')
            ->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        $news->softdelete();

        return redirect()->route('home.index')
            ->with('success', 'News deleted successfully.');
    }
}
