<!-- Features section -->
<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Aider à changer des vies</h2>
            <p class="text-gray-600 mb-12">
                Notre ministère est déterminé à apporter une aide concrète aux plus démunis.
                Nous croyons que chaque vie a de la valeur et que chaque personne mérite une chance de s'épanouir.
            </p>
        </div>
        <div class="flex flex-wrap -mx-4 mt-12">
            @foreach ($aide_sociales as $key => $aide_sociale)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="rounded-md bg-white shadow-md p-8">
                        <h3 class="text-2xl font-bold mb-4">{{ $aide_sociale->motif }}</h3>
                        <p class="text-gray-600 mb-4">Date : {{ $aide_sociale->dataide }}</p>
                        <p class="text-gray-600 mb-4">Nature : {{ $aide_sociale->codnat }}</p>
                        <a href="{{ route('create_donator', $aide_sociale->numaid) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Faire un don</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
