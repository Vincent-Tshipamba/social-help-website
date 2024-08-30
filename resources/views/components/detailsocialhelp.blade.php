@props(['socialhelps'])

<div class="w-full justify-center mx-auto sm:p-6 md:p-6">
    <div class="flex gap-10">
        @if (count($socialhelps) > 0)
            @foreach ($socialhelps as $socialhelp)
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="px-4 py-2 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Informations sur le lanceur
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Ce sont les informations sur le pasteur qui a publié l'appel aux dons
                            </p>
                        </div>
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Prénom
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->prenom }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nom
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->nompast }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Postnom
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->postnom }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Fonction
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->fonction }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Contact
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->contact }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Service
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->libserv }}
                                </dd>
                            </div>
                        </dl>

                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="px-4 py-2 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Informations sur l'appel à l'aide
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Ce sont les informations sur l'appel qui a été lancée
                            </p>
                        </div>
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Date de lancement
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->datelan }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Date limite prévue
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->datlimit }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Heure de lancement
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->heure }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Motif
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->motif }}
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Montant voulu
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $socialhelp->montbesoin }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            @endforeach
        @else
            <dl class="sm:flex items-center justify-between gap-4">
                <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">
                    Aucune information sur l'appel pour l'instant.
                </dt>
            </dl>
        @endif
    </div>
</div>
