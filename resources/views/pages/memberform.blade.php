<?php
// Created at: Sublime Text 3
// Writer: Carlo Jumagdao
// Date: February 22, 2016
// Time: 4:14am
?>
@extends('master')
@section('title')
    {{"member-form"}}
@stop   
@section('content')

	<div id="content">
	      <div id="formBuilder"></div>
	</div>

	<script src="{{ URL::asset('assets/js/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery/jquery-ui.min.js') }}"></script>
	<script src="{{ URL::asset('assets/src/libraries/dust-js/dust-core-0.3.0.min.js')}}"></script>
	<script src="{{ URL::asset('src/libraries/dust-js/dust-full-0.3.0.min.js')}}"></script>
	<script src="{{ URL::asset('src/libraries/dust-js/dust-helpers.js')}}"></script>
	<script src="{{ URL::asset('src/libraries/tabs.jquery.js')}}"></script>
	<script src="{{ URL::asset('src/formBuilder.jquery.js')}}"></script>

	<script>
	  $('#formBuilder').formBuilder({
	    load_url: '{{ URL::asset("src/json/example.json")}}',
	    save_url: '{{ URL::asset("demo/save.php")}}',
	    onSaveForm: function() {
	      window.location.href = '{{ URL::asset("demo/render.php")}}';
	    }
	  });
	</script>

@stop