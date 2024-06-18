@extends('layouts.master')

@section('title')
  sudoku | solve
@endsection
<style>
    .solve{
      background-image: url("{{asset('assets/images/hero-bg.png')}}");
    }
  </style>
@section('content')
<section class="solve" id="solve">
    <div id="container">
        <h1 class = "padd">Sudoku Solver</h1>
        <table id="sudoku-board">

          <colgroup><col><col><col>
          <colgroup><col><col><col>
          <colgroup><col><col><col>
          <tbody>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
          <tbody>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
          <tbody>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
           <tr> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td> <td contenteditable="true"></td>
        </table>
        <div class="btns">
        <div>
          <button id="solve-button">Solve</button>
        </div>
        <div>
          <button id="clear-button">Clear board</button>
        </div>
    </div>
      </div>
</section>
@endsection