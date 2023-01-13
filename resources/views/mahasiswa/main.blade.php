@extends('../layout/' . $layout)

@section('head')
    <title>Form Mahasiswa</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block grid-cols-2 gap-4">
            <!-- BEGIN -->
            <div class="h-screen flex py-5">
                <div class="my-auto mx-auto bg-white dark:bg-darkmode-600 px-5 sm:px-8 py-8 rounded-md shadow-md w-full sm:w-3/4 lg:w-2/4">
                    <h2 class="intro-x font-bold text-2xl text-center">Pilih Form</h2>
                    <div class="intro-x mt-5 text-center">
                        <a href="{{ route('form1') }}" role="button" class="btn btn-primary w-full align-top">Pendaftaran Sidang</a>
                    </div>
                    <div class="intro-x mt-5 text-center">
                        <a href="#" role="button" class="btn btn-primary w-full align-top">Pendaftaran DO</a>
                    </div>
                    <div class="intro-x mt-10 dark:text-slate-500 text-center">
                        This Web Powered By <a class="text-primary" href=""><u>Narative</u></a>.
                    </div>
                </div>
            </div>
            <!-- END -->
        </div>
    </div>

                  

    <!-- BEGIN: Modal Content -->
    <div id="successmodal" class="modal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="check-circle" class="w-16 h-16 text-success mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Terimakasih!</div>
                        <div class="text-slate-500 mt-2">Data Telah Tersimpan!</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
    
    <!-- Success Modal -->
    @if(Session::has('sukses'))
    <script type="text/javascript">
        window.onload = () => {
        document.querySelector('[data-target="#successmodal"]').click();
        }
    </script>
    @endif
    <!-- End Modal -->
                  
    <!-- BEGIN: Modal Toggle -->
    <div class="text-center">
        <button type="button" data-tw-toggle="modal" data-tw-target="#successmodal" data-target="#successmodal" hidden></button>
    </div>
    <!-- END: Modal Toggle -->

@endsection
