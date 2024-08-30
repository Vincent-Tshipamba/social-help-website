@props(['donateurs'])
<div class="px-4 py-1 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
        Profile de donateur
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Ce sont les informations sur un donateur
    </p>
</div>
<div class="max-w-screen-xl mx-auto sm:p-6 md:p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
        @if (count($donateurs) > 0)
            @foreach ($donateurs as $item)
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nom complet
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $item->nomsdonat }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Profession
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $item->profess }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Téléphone
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    (243)
                                    {{ $item->telephone }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Adresse
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    (243)
                                    {{ $item->adresse }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            @endforeach
        @else
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    Aucun donateur n'a effectué de dons pour l'instant.
                </dt>
            </dl>
        @endif
    </div>
</div>
