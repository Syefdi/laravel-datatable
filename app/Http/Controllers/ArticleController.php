<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Articles::all();
            // dd($data);

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row) {
                if ($row->img) {
                    // Mengembalikan tag <img> dengan src yang menunjuk ke path gambar
                    return '<img src="' . asset('storage/' . $row->img) . '" class="img-thumbnail" width="100" height="auto">';
                } else {
                    // Jika gambar tidak ada, menampilkan teks atau gambar default
                    return '<span>No Image</span>';
                }
            })
            ->addColumn('release_date', function($row) {
                $return = date('d M Y', strtotime($row->created_at));
                return $return;
            })
            ->addColumn('action', function($row) {
                return '<div>
                            <button class="btn btn-sm btn-primary text-light edit" onClick="editModal(this)" data-id="' .$row->id. '"><i class="fa fa-pencil"></i> Edit</button>
                            <button class="btn btn-sm btn-danger delete" text-light" data-id="' .$row->id. '"><i class="fa fa-trash"></i> Delete</button>
                        </div>';
            })
            ->rawColumns(['action', 'image', "release_date"])
            ->make(true);
        }
        return view('artikel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        $artikel = new Articles();
        $artikel->title = $request->input('title');
        $artikel->content = $request->input('content');
        $artikel->author = $request->input('author');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('image_artikel', $filename, 'public'); // Adjust storage path as needed
        } else {
            // Handl    e case where attachment is required but not provided
            // return back()->with('error', 'img attachment m_material  file is required.');
        }
        $artikel->img = $path;

        $artikel->save();
        return response()->json([
            'message' => 'Artikel created Successfully',
            'status' => 'created',
            'data' => $artikel
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Articles::findOrFail($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            // 'img' => 'required',
        ]);

        $artikel = Articles::findOrFail($id);
        $artikel->title = $validate['title'];
        $artikel->content = $validate['content'];
        $artikel->author = $validate['author'];
        if ($request->hasFile('img')) {
            // Hapus file lama jika ada
            if ($artikel->img && \Storage::disk('public')->exists($artikel->img)) {
                \Storage::disk('public')->delete($artikel->img);
            }
    
            // Simpan file baru
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('image_artikel', $filename, 'public');
            $artikel->img = $path;
        }

        $artikel->save();

        return response()->json([
            'message' => 'Updated material successfully',
            'status' => 'updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel =  Articles::find($id);
        if (!is_null($artikel)) {
            $artikel->delete(); // This will perform a soft delete
            return response()->json(['success' => true], 200);
        }

        return response()->json(['error' => 'Item not found'], 404);
    }
}
