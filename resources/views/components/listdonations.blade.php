                @props(['donations'])

                <div class="mx-auto sm:p-6 md:p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
                        @if (count($donations) > 0)
                            @foreach ($donations as $donation)
                                <div class="bg-white overflow-hidden shadow rounded-lg border">
                                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                        <dl class="sm:divide-y sm:divide-gray-200">
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Date de contribution
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->datcontribu }}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Motif
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->motifcontr }}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Heure de contribution
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->heure }}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Montant reçu
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->montantcontr }}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Mode de contribution
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->modeparticipat }}
                                                </dd>
                                            </div>
                                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Nom complet du donateur
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    {{ $donation->donateur->nomsdonat }}
                                                </dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                                    Aucun don n'a été collecté pour l'instant.
                                </dt>
                            </dl>
                        @endif
                    </div>
                </div>
