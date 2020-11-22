<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::all();

        return view('avored::news.index' , compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avored::news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all_data = $request->all();

        if($request->hasFile('image')) {
            $file = $request->file('image');

            $uuid = Str::uuid()->toString();
            $name = $uuid . time() . '.' . $file->extension();
            $file->move(public_path('../storage/app/public/news/'), $name);
            $all_data['image'] = '/storage/news/' . $name;

        }
        $fayl = News::create($all_data);
        return redirect()->route('admin.news.index')
            ->with('successNotification', __(
                'avored::system.notification.store'
                ));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);

        return view('avored::news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($id);
        $contact = News::find($id);
        if($request->hasFile('image')) {
            $file = $request->file('image');

            $uuid = Str::uuid()->toString();
            $name = $uuid . time() . '.' . $file->extension();
            $file->move(public_path('../storage/app/public/news/'), $name);
            $contact['image'] = '/storage/news/' . $name;

        }
        $contact = News::find($id);
        $contact->header=  $request->get('header');
        $contact->texts = $request->get('texts');

        $contact->save();
        return redirect('/news/index')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
