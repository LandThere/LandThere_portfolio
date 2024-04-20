@extends('admin.content')
@section('title', 'Skills')
@section('content')
@include('admin.navbar')
<section class="home-section">
  <div class="text">Skills</div>
  <a href="{{ route('skill.create') }}"><button class="button">
    <svg fill="#ffffff" version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 45.402 45.402" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141 c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27 c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435 c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"></path> </g> </g></svg>
  <p class="txt">Add</p>
</button></a>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Skill</th>
        <th scope="col">Experience</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @csrf
        @foreach ( $skills as $skill)
        <td>{{ $skill->id}}</td>
        <td>{{ $skill->skill}}</td>
        <td>{{ $skill->experience}}</td>
        <td>{{ $skill->name}}</td>
        <td><img src="{{ asset( $skill->image )}}" style="width: 50px; height: 50px;" alt="Img" />  </td>
        <td>
          <a href="{{ url('/skill/'.$skill->id.'/edit') }}"><button class="action">Edit</button>
          <button class="action delete-btn" data-url="{{ url('/skill/'.$skill->id.'/delete') }}">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection