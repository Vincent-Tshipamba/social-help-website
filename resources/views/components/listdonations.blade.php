                @props(['donations'])

                @if (count($donations) > 0)
                    @foreach ($donations as $donation)
                        <div
                            class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Date de
                                    contribution
                                </dt>
                                <dd id="dataide" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->datcontribu }}
                                </dd>
                            </dl>
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Motif de
                                    contribution
                                </dt>
                                <dd id="motifcontr" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->motifcontr }}
                                </dd>
                            </dl>
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Heure de
                                    contribution
                                </dt>
                                <dd id="heurecontr" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->heure }}
                                </dd>
                            </dl>
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Montant envoyé
                                </dt>
                                <dd id="montantcontr" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->montantcontr }}
                                </dd>
                            </dl>
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Mode de transfert
                                    d'argent
                                </dt>
                                <dd id="modeparticipat" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->modeparticipat }}
                                </dd>
                            </dl>
                            <dl class="sm:flex items-center justify-between gap-4">
                                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Noms du donateur
                                </dt>
                                <dd id="nomsdonat" class="font-medium text-gray-900 dark:text-white sm:text-end">
                                    {{ $donation->donateur->nomsdonat }}
                                </dd>
                            </dl>
                        </div>
                    @endforeach
                @else
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                            Aucun don n'a été collecté pour l'instant.
                        </dt>
                    </dl>
                @endif
