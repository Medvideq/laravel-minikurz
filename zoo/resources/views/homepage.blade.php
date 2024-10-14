<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
    <div class="container">
        {{-- toto je komentar --}}
        {{-- takto se pouziva komponenta --}}
        <x-menu />
        <h1>ZOO</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur animi omnis adipisci, repellat vitae ipsam quas quam optio culpa? Rem minus, laudantium esse saepe expedita adipisci nobis natus obcaecati!</p>

        <p>Stav navstevnosti: {{ $stavNavstevnosti }} %</p>

        @if ($stavNavstevnosti > 80)
            <p>Mame plno.</p>
        @elseif($stavNavstevnosti > 60)
            <p>Mame malo mist.</p>
        @elseif($stavNavstevnosti > 40)
            <p>Je poloprazdno.</p>
        @elseif($stavNavstevnosti > 20)
            <p>Mame hodne mista.</p>
        @else
            <p>Je tu przadno.</p>
        @endif


        @if ($jeOtevreno == true)
            <h3>Mame otevreno!</h3>
        @else
            <h3>Mame zavreno!</h3>
        @endif

        {{-- dump and die (vypise promenne frontendakovi) - jde videt v prohlizeci kdyz se odkomentuje --}}
        {{-- dd(get_defined_vars()) --}}


        <h4>Casy verejneho krmeni</h4>
        {{-- iterace pole v bladu --}}
        <ul>
            @foreach ($casyKrmeni as $cas)
                <li>{{$cas}}</li>
            @endforeach
        </ul>

        <table border="1px">
            <tr>
                <th>Jmeno</th>
                <th>Popis</th>
            </tr>
        @foreach($poleZviratek AS $zvire)
            <tr>
                <td> {{$zvire->jmeno}} </td>
                <td> {{$zvire->popis}} </td>
            </tr>
        @endforeach
        </table>

    </div>
</body>
</html>
