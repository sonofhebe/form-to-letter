@extends('../layout/' . $layout)

@section('head')
    <title>Form Mahasiswa</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block grid-cols-2 gap-4">
            <!-- BEGIN: Form -->
            <div class="h-screen flex py-5">
                <div class="my-auto mx-auto bg-white dark:bg-darkmode-600 px-5 sm:px-8 py-8 rounded-md shadow-md w-full sm:w-3/4 lg:w-2/4">
                    <div class="intro-x text-center">
                        <div class="flex text-xs sm:text-sm float-right">
                            <div class="intro-x text-center mb-2">
                                <a href="{{ route('mahasiswa') }}" role="button" class="btn btn-secondary text-primary">Kembali</a>
                            </div>
                        </div>
                        <div class="flex text-xs sm:text-sm float-left">
                            <h2 class="intro-x font-bold text-2xl text-center">Form Pendaftaran Sidang</h2>
                        </div>
                        <br><br>
                        <div class="intro-x text-slate-400 text-center xl:text-left">Lengkapi data dengan benar</div>
                    </div>
                    <div class="intro-x mt-3">
                        <form action="/saveform" method="POST">
                            @csrf
                            <h3 class="intro-x font-bold text-dark">Nama :</h3>
                            <input name="nama" type="text" class="intro-x form-control py-3 px-4 block mt-1" placeholder="Nama Lengkap" required><br>
                            <h3 class="intro-x font-bold text-dark">Fakultas :</h3>
                            <input name="fakultas" type="text" class="intro-x form-control py-3 px-4 block mt-1" placeholder="Fakultas" required><br>
                            <h3 class="intro-x font-bold text-dark">Jurusan :</h3>
                            <input name="jurusan" type="text" class="intro-x form-control py-3 px-4 block mt-1" placeholder="Jurusan" required><br>
                            <div class="intro-x mt-5 text-center">
                                <input type="submit" class="btn btn-primary w-full align-top" value="Kirim">
                            </div>
                        </form>
                    </div>
                    <div class="intro-x mt-10 dark:text-slate-500 text-center">
                        This Web Powered By <a class="text-primary" href=""><u>Narative</u></a>.
                    </div>
                </div>
            </div>
            <!-- END: Form -->
        </div>
    </div>
@endsection