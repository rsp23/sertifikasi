<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('bookLists', ["siteName" => "Daftar Buku"], compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createBook', ["siteName" => "Tambah Buku"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'id' => 'required|unique:books',
            'judul' => 'required|unique:books',
            'pengarang' => 'required',
        ]);

        Book::create([
            'id' => $validated['id'],
            'judul' => $validated['judul'],
            'pengarang' => $validated['pengarang'],
        ]);
        return redirect('book')->with('success', 'Kamu berhasil menambahkan data buku');
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
        $book = Book::findOrFail($id);

        return view('editBook', ["siteName" => "Edit Buku"], compact('book'));
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
        $validated = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
        ]);
        Book::where('id', $id)
            ->update($validated);
        return redirect('book')->with('success', 'Berhasil edit buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Loan::where('buku_kode', $id)->delete();

        Book::destroy($id);
        return redirect('book')->with('success', 'Berhasil menghapus buku');
    }
}
