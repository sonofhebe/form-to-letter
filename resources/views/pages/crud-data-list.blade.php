@extends('../layout/' . $layout)

@section('subhead')
    <title>Data List</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Data List</h2>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table id="tabel" class="table">
                <thead>
                    <tr>
                        <th class="text-center whitespace-nowrap">No</th>
                        <th class="text-center whitespace-nowrap">Nama</th>
                        <th class="text-center whitespace-nowrap">Fakultas</th>
                        <th class="text-center whitespace-nowrap">Jurusan</th>
                        <th class="text-center whitespace-nowrap">Tanggal</th>
                        <th class="text-center whitespace-nowrap">Status</th>
                        <th class="text-center whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($data as $d)
                        <tr class="intro-x">
                            <td class="text-center">{{ $no }}</td>
                            <td class="text-center">{{ $d->nama }}</td>
                            <td class="text-center">{{ $d->fakultas }}</td>
                            <td class="text-center">{{ $d->jurusan }}</td>
                            <td class="text-center">{{ $d->tanggal }}</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{ $d->status >= 1 ? 'text-success' : 'text-danger' }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $d->status >= 1 ? 'Done' : 'Belum Print' }}
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="/print/data1/{{ $d->id_data }}"  onclick="window.location.reload(true);">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Print
                                    </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-{{ $d->id_data }}" data-id="{{ $d->id_data }}">
                                        <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- BEGIN: Delete Confirmation Modal -->
                        <div id="delete-{{ $d->id_data }}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Apa Anda Yakin?</div>
                                            <div class="text-slate-500 mt-2">Menghapus data {{ $d->nama }}? <br>Data ini tidak akan bisa kembali.</div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                            <a class="btn btn-danger w-24" href="/hapus/data1/{{ $d->id_data }}">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Delete Confirmation Modal -->
                        <?php $no++ ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->

        <!-- Download -->
        @if (Session::has('file'))
        <script>
        window.onload = () => {
        document.querySelector('[data-target="#download"]').click();
        }
        </script>
        @endif

            <button type="button" data-target="#download" onclick="window.location.href='download/{{ Session::get('file') }}';" hidden></button>
        

    </div>
    
@endsection
