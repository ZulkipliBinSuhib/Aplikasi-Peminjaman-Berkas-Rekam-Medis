@extends('layout')
@section('content')
<section class="content">

    <div class="row">
        <div class="col-12">
          
         
                <form >
                    <div class="form-row">
                        <div class="col-5">
                        <select name="date" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected disabled>Date</option>
                                @foreach(App\Peminjaman::all() as $row)
                                <option value="{{$row->tanggal_pinjam}}">{{$row->tanggal_pinjam}}</option>
                                @endforeach
                        </select>
                            
                        </div>
                      
                       
                        
                        <button type="submit" class="btn btn-primary mb-2">View</button>
                    </div>
                </form>
            
        </div>
    </div>
</section>
@endsection
