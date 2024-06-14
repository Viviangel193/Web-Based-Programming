<h1>TENTANG</h1>
<p>{{$nama}}</p>
<p>{{$usia}}</p>
@foreach ($hobi as $h)
    <p>{{$h}}</p>
@endforeach
{{($usia >= 16 && $usia <= 65) ? 'Usia Kerja':'Bukan Usia Kerja'}}