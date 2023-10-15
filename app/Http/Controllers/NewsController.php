<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data['title'] = 'News';
        $data['q'] = $request->get('q');
        $data['news'] = News::where('judul_berita', 'like', '%' . $data['q'] . '%')->get();
        return view('news.index', $data);

        $data2['title'] = 'News';
        $data2['q'] = $request->get('q');
        $data2['news'] = News::where('judul_berita', 'like', '%' . $data2['q'] . '%')->get();
        return view('landingPage.Assets.Layout.berita', $data2);
    }

    public function index2(Request $request)
    {


        $data2['title'] = 'News';
        $data2['q'] = $request->get('q');
        $data2['news'] = News::where('judul_berita', 'like', '%' . $data2['q'] . '%')->get();
        return view('landingPage.Assets.Layout.berita', $data2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['title'] = 'Add News';
        return view('news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',

        ]);

        $news = new News($request->all());
        $news->save();
        return redirect('admin/news')->with('success', 'News added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        $data['title'] = 'Edit News';
        $data['news'] = $news;
        return view('news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        $request->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
        ]);

        $news->judul_berita = $request->judul_berita;
        $news->isi_berita = $request->isi_berita;
        $news->lokasi = $request->lokasi;
        $news->tanggal = $request->tanggal;
        $news->save();
        return redirect('news')->with('success', 'News updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();
        return redirect('news')->with('success', 'News deleted successfully');
    }
}
