<x-home-master>
@section('content')
<div style="height: 200px;" >
<br>
<form method="post" action="{{route('covid.tracker')}}">
    @csrf
    <div class="form-group">
    <label for="title">Country Name</label>
        <input type="text" style="width:50%" name="country_name" class="form-control" placeholder="Enter Country Name">
        <button type="submit" name="submit" class="btn btn-primary btn-sm">Get Country Stat</button>
    </div>

</form>
</div>
@if($data)
<div class="row"> 
       <div class="col-sm-6">
            <div  class="container p-3 my-3 bg-primary text-white">
                <p>Country Name : {{$data['country']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Today Cases : {{$data['todayCases']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Total Cases : {{$data['cases']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-success text-white">
                <p>Total Recovered : {{$data['recovered']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-danger text-white">
                <p>Today Deaths : {{$data['todayDeaths']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-info text-white">
                <p>Total Deaths : {{$data['deaths']}}</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="container p-3 my-3 bg-warning text-white">
                <p>Active Cases : {{$data['active']}}</p>
            </div>
            <div class="container p-3 my-3 bg-danger text-white">
                <p>Critical Cases : {{$data['critical']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Cases Per One Million : {{$data['casesPerOneMillion']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Deaths Per One Million : {{$data['deathsPerOneMillion']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Total Tests : {{$data['totalTests']}}</p>
            </div>
            <div  class="container p-3 my-3 bg-secondary text-white">
                <p>Tests Per One Million : {{$data['testsPerOneMillion']}}</p>
            </div>
        </div>
    </div>



@endif
@endsection
</x-home-master>