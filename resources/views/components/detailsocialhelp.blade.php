                @props(['socialhelp'])
                <div
                    class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Date de lancement</dt>
                        <dd id="dataide" class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ $socialhelp->dataide }}
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Motif de l'appel
                        </dt>
                        <dd id="motifaide" class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ $socialhelp->motif }}
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Nature de l'appel
                        </dt>
                        <dd id="libnataide" class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ isset($socialhelp->nature->libnat) ? $socialhelp->nature->libnat : 'Non défini.' }}
                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Objet de l'analyse
                        </dt>
                        <dd id="objetaide" class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ isset($socialhelp->analyse->objet) ? $socialhelp->analyse->objet : 'Non défini.' }}
                        </dd>
                    </dl>
                </div>
