@extends('layout')

@section('content')

        <div class="w-100 relative">

            <div class="w-100 bg-black absolute" style="height:650px">
                <img class="clip-full z-0 opacity-60" src="{{ asset('images/wallpaper.jpg') }}">
            </div>

            <div class="w-100">
                <div class="w-100 pt-20 pl-20 flex relative">
                    <div class="w-50 pt-24 text-white">
                        <p class="font-bold text-5xl">M.I.P.C Emergency Solution</p>
                        <p class="-mt-8 text-lg">With the fact that we represent renowned industries,
                        we are able to provide reliable & affordable goods to both local and international market in compliance.</p>
                        <div class="pt-3">
                            <a class="btn bg-green">Read Notices</a>
                        </div>
                        
                    </div>
                    <div class="w-50">
                        <div class="w-90 pl-5 pb-10">
                            <div class="bg-white shadow-xl border-t-6 border-b-6 border-green mt-10 rounded w-100 ">
                                <div class="text-center pt-1 text-grey-darkest">
                                    <p class="text-2xl font-bold">Send An Emergency</p>
                                </div>
                                <form action="{{ route('inquiry.store') }}" method="POST">
                                    @csrf
                                    <div class="w-80  my-2 mx-auto">
                                        <label>Names* :</label>
                                        <input name="name" type="text" class="form-input shadow-none" placeholder="type your names here ......">
                                    </div>

                                    <div class="w-80  my-2 mx-auto">
                                        <label>Select Emergency Type* :</label>
                                        <select name="type" class="form-input shadow-none">
                                            <option >Select ..........</option>
                                            <option value="Medical Emergency">Medical Emergency</option>
                                            <option value="Electrical Emergency">Electrical Emergency</option>
                                            <option value="Accident Emergency">Accident Emergency</option>
                                        </select>
                                    </div>

                                    <div class="w-80  my-2 mx-auto">
                                        <label>Location* :</label>
                                        <input name="location" type="text" class="form-input shadow-none" placeholder="ex: L5 Culinary, Garden, Dormitory ......">
                                    </div>

                                    

                                    <div class="w-80  my-2 mx-auto">
                                        <label>Describe * :</label>
                                        <textarea name="description" class="form-input shadow-none"></textarea>
                                    </div>

                                    <div class="text-center pb-4">
                                        <button type="submit" class="bg-green btn w-40 mt-2 text-white font-bold">Send 
                                            <img class="w-10" src="{{ asset('images/send.svg') }}">
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
@endsection
