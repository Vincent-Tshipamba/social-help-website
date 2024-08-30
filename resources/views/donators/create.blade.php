<x-app-layout>
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
    <div class="container relative flex flex-col justify-center overflow-hidden bg-gray-50 sm:py-12">
        <h1 class="text-3xl font-bold text-center mb-4">Devenir donateur</h1>
        <ol class="flex items-center w-full mb-4 sm:mb-5">
            <li
                class="flex w-full items-center text-blue-600 dark:text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block dark:after:border-blue-800">
                <div
                    class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                    <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                    </svg>
                </div>
            </li>
            <li
                class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <div
                    class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                    <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM2 12V6h16v6H2Z" />
                        <path d="M6 8H4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2Zm8 0H9a1 1 0 0 0 0 2h5a1 1 0 1 0 0-2Z" />
                    </svg>
                </div>
            </li>
            <li
                class="flex items-center w-full after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <div
                    class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                    <svg class="w-4 h-4 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                    </svg>
                </div>
            </li>
        </ol>
        <div class="flex gap-5">
            <div id="first-step" class="bg-white p-8 rounded-lg shadow-lg md:w-1/3">
                <div class="w-full pt-1 pb-5">
                    <div
                        class=" text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <span class="inline-block bg-gray-200 rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4" />
                            </svg>
                        </span>
                    </div>
                </div>
                <h2 class="text-2xl font-semibold text-center mb-4">Étape 1 : Informations personnelles</h2>
                <form id="donator-infos-form">
                    @csrf
                    <div class="mb-4">
                        <label for="nomsdonat" class="block text-gray-700 text-sm font-semibold mb-2">Nom et prénom
                            *</label>
                        <input type="text" id="nomsdonat" name="nomsdonat"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                            required placeholder="Jean Omar">
                    </div>
                    <div class="mb-4">
                        <label for="adresse" class="block text-gray-700 text-sm font-semibold mb-2">Adresse
                            *</label>
                        <input type="text" id="adresse" name="adresse"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                            required placeholder="13 Avenue Kitega">
                    </div>
                    <div class="mb-4">
                        <label for="telephone" class="block text-gray-700 text-sm font-semibold mb-2">Téléphone
                            *</label>
                        <input type="text" id="telephone" name="telephone"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                            required placeholder="08 26 86 90 63">
                    </div>
                    <div class="mb-4">
                        <label for="profess" class="block text-gray-700 text-sm font-semibold mb-2">Profession
                            *</label>
                        <input type="text" id="profess" name="profess"
                            class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                            required placeholder="Ingénieur">
                    </div>
                    <button type="submit" id="btn-submit-first"
                        class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Valider</button>
                    <p class="text-gray-600 text-xs text-center mt-4">
                        En cliquant sur Valider, vous acceptez les <a href="#"
                            class="text-blue-500 hover:underline">Conditions générales</a>.
                    </p>
                </form>
            </div>
            <div id="second-step" class="rounded-lg bg-white shadow-lg md:w-1/3 p-5">
                <div class="w-full pt-1 pb-5">
                    <div
                        class=" text-white overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                        <span class="inline-block bg-gray-200 rounded-full p-3">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H4Zm0 6h16v6H4v-6Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M5 14a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm5 0a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
                <h2 class="text-2xl font-semibold text-center mb-4">Étape 1 : Informations de paiement sécurisé</h2>
                <form id="donators-payment-form">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="iddonat" id="iddonat" value="">
                    <input type="hidden" name="numaid" id="numaid" value="{{ $aide->numaid }}">
                    <input type="hidden" name="motifcontr" id="motifcontr" value="{{ $aide->motif }}">
                    <input type="hidden" name="observation" id="observation" value="">
                    <input type="hidden" name="datcontribu" id="datcontribu" value="{{ now()->format('Y-m-d') }}">
                    <input type="hidden" name="heure" id="heure" value="{{ now()->format('H:i:s') }}">
                    <div class="mb-3 flex -mx-2">
                        <div class="px-2">
                            <label for="type1" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-blue-500" name="modeparticipat"
                                    id="type1" value="credit-card" checked>
                                <img src="https://leadershipmemphis.org/wp-content/uploads/2020/08/780370.png"
                                    class="h-8 ml-3">
                            </label>
                        </div>
                        <div class="px-2">
                            <label for="type2" class="flex items-center cursor-pointer">
                                <input type="radio" class="form-radio h-5 w-5 text-blue-500" name="modeparticipat"
                                    id="type2" value="mobile-money">
                                <img src="https://www.sketchappsources.com/resources/source-image/PayPalCard.png"
                                    class="h-8 ml-3">
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Nom sur la carte</label>
                        <div>
                            <input
                                class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors"
                                placeholder="Jean Dupont" type="text" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="font-bold text-sm mb-2 ml-1">Numéro de carte</label>
                        <div>
                            <input
                                class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors"
                                placeholder="0000 0000 0000 0000" type="text" required />
                        </div>
                    </div>
                    <div class="mb-3 -mx-2 flex items-end">
                        <div class="px-2 w-1/2">
                            <label class="font-bold text-sm mb-2 ml-1">Expiration date</label>
                            <div>
                                <select
                                    class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors cursor-pointer">
                                    <option value="01">01 - Janvier</option>
                                    <option value="02">02 - Février</option>
                                    <option value="03">03 - Mars</option>
                                    <option value="04">04 - Avril</option>
                                    <option value="05">05 - Mai</option>
                                    <option value="06">06 - Juin</option>
                                    <option value="07">07 - Juillet</option>
                                    <option value="08">08 - Août</option>
                                    <option value="09">09 - Septembre</option>
                                    <option value="10">10 - Octobre</option>
                                    <option value="11">11 - Novembre</option>
                                    <option value="12">12 - Décembre</option>
                                </select>
                            </div>
                        </div>
                        <div class="px-2 w-1/2">
                            <select
                                class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors cursor-pointer">
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-10 flex gap-10">
                        <div>
                            <label class="font-bold text-sm mb-2 ml-1">Code de sécurité</label>
                            <div>
                                <input
                                    class="w-32 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors"
                                    placeholder="0000" type="text" required />
                            </div>
                        </div>
                        <div>
                            <label class="font-bold text-sm mb-2 ml-1">Montant (US)</label>
                            <div>
                                <input required name="montantcontr"
                                    class="w-32 px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-blue-500 transition-colors"
                                    placeholder="10, 20, ... 1000000" type="text" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" id="btn-submit-second"
                            class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-700 focus:bg-blue-700 text-white rounded-lg px-3 py-3 font-semibold"><i
                                class="mdi mdi-lock-outline mr-1"></i> Valider le paiement</button>
                    </div>
                </form>
            </div>
            <div id="third-step" class="rounded-lg bg-white shadow-lg md:w-1/3 p-5">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl mb-2">Merci infiniment pour
                    votre soutien !</h2>
                <p class="text-gray-500 dark:text-gray-400 mb-6 md:mb-8">Votre commande <a href="#"
                        class="font-medium text-gray-900 dark:text-white hover:underline">#7564804</a> sera traitée
                    dans les 24 heures ouvrables. Nous vous notifierons par e-mail une fois que votre don aura été
                    expédiée.</p>
                <div
                    class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 mb-6 md:mb-8">
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Date de contribution</dt>
                        <dd id="daterecap" class="font-medium text-gray-900 dark:text-white sm:text-end">

                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Motif de contribution
                        </dt>
                        <dd id="motifrecap" class="font-medium text-gray-900 dark:text-white sm:text-end">

                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Heure de contribution
                        </dt>
                        <dd id="heurerecap" class="font-medium text-gray-900 dark:text-white sm:text-end">

                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Montant de contribution
                        </dt>
                        <dd id="montantrecap" class="font-medium text-gray-900 dark:text-white sm:text-end">

                        </dd>
                    </dl>
                    <dl class="sm:flex items-center justify-between gap-4">
                        <dt class="font-normal mb-1 sm:mb-0 text-gray-500 dark:text-gray-400">Mode de participation
                        </dt>
                        <dd id="moderecap" class="font-medium text-gray-900 dark:text-white sm:text-end">

                        </dd>
                    </dl>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('root') }}"
                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Retour a la page d'accueil</a>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script>
            $(document).ready(function() {
                $('#second-step').hide();
                $('#third-step').hide();
                $('#donator-infos-form').submit(function(e) {
                    e.preventDefault();
                    var formData = $(this).serialize();
                    $.ajax({
                        type: 'POST',
                        url: '/donators',
                        data: formData,
                        success: function(data) {
                            $('#iddonat').attr('value', data);
                            $('#btn-submit-first').prop('disabled', true);
                            $('#donator-infos-form input').prop('readonly', true);
                            $('#donator-infos-form').addClass('select-none');
                            $('#second-step').show();
                            // Load payment form here
                        }
                    });
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('#donators-payment-form').submit(function(event) {
                    let i = $('meta[name="csrf-token"]').attr('content')
                    event.preventDefault();
                    var formData2 = $(this).serialize();
                    console.log(formData2);
                    var csrf_token = $('meta[name="csrf-token"]').attr('content')
                    $.ajax({
                        type: 'POST',
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader("X-CSRF-TOKEN", csrf_token);
                        },
                        url: '/participers',
                        data: formData2,
                        success: function(data) {
                            $('#btn-submit-second').prop('disabled', true);
                            $('#donators-payment-form input').prop('readonly', true);
                            $('#donators-payment-form select').prop('disabled', true);
                            $('#third-step').show();
                            let date = $('#datcontribu').attr('value');
                            let mode = $('input[name="modeparticipat"]:checked').val();
                            let motif = $('#motifcontr').attr('value');
                            let heure = $('#heure').attr('value');
                            let montant = $('input[name="montantcontr"]').val()

                            $('#daterecap').text(date)
                            $('#motifrecap').text(motif)
                            $('#heurerecap').text(heure)
                            $('#moderecap').text(mode)
                            $('#montantrecap').text(montant);
                        }
                    });
                });
            });
        </script>
    @endsection
</x-app-layout>
