@extends('admin.layouts.app')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">

                <span class="font-medium">{{ $error }}</span>

            </div>
        @endforeach
    @endif
    @if (Session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif
    <div class="flex">
        <div class="w-full">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight text-left">
                {{ __('Liste des donnateurs') }}
            </h2>
        </div>
    </div>

    <div class="py-6 relative overflow-x-auto">

        <table id="socialhelpsTable" class="p-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        N°
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Date lancement
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Motif
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Nature
                    </th>
                    <th scope="col"
                        class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Analyse
                    </th>
                    <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($socialhelps as $key => $socialhelp)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $key + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $socialhelp->dataide }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $socialhelp->motif }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $socialhelp->nature->libnat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $socialhelp->analyse->objet }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('socialhelps.show', $socialhelp->numaid) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $('#socialhelpsTable').DataTable({
            layout: {
                topStart: {
                    pageLength: {
                        menu: [10, 25, 50, 100, 200]
                    },
                    buttons: [
                        'copy',
                        'print',

                        {
                            extend: 'spacer',
                            style: 'bar',
                            text: 'Export files:'
                        },
                        'csv',
                        'excel',
                        'spacer',
                        'pdf',
                        {
                            extend: 'spacer',
                            style: 'bar',
                            text: ':'
                        },

                        'colvis'
                    ]
                },
                topEnd: {
                    search: {
                        placeholder: 'Type search here'
                    }
                },
                bottomEnd: {
                    paging: {
                        numbers: 3
                    }
                },

            },
            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
        $('#socialhelpsTable').css('width', '100%');

        $('div.dt-container div.dt-layout-row').css('display', 'unset');

        $('.dt-container').addClass('text-base text-gray-800 dark:text-gray-400 leading-tight')

        $('.dt-buttons').addClass('mt-4')
        $('.dt-buttons buttons').addClass('cursor-pointer mt-5 bg-slate-600 p-2 rounded-sm font-bold')

        $("#dt-length-0").addClass('text-gray-700 dark:text-gray-400 w-24 bg-white');
        $("label[for='dt-length-0']").addClass('text-gray-700 dark:text-gray-400').text(
            ' ');

        $('.dt-input').addClass('w-42')
    </script>
@endsection
