@extends('layouts.base')


@section('title', 'Nouvelle demande')
@section('main')


<div class="container gestion Insert col-lg-8">
  <h1>Insérer un thé </h1> <br>
  {!! Form::open(['url' => 'the/insert']) !!}
    <div class="form-group">
      {{{ Form::label('Type') }}}
      {{{ Form::select('type', $types,  ['required' => 'required', 'class' => 'select-one blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Nom') }}}
      {{{ Form::text('nom', '',  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Référence') }}}
      {{{ Form::text('reference', '',  ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Description') }}}
      {{{ Form::text('description', '',  ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Prix') }}}
      {{{ Form::number('prix', '', ['required' => 'required', 'class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('stock') }}}
      {{{ Form::number('stock', '', ['class' => 'blue']) }}}
    </div>
    <div class="form-group">
      {{{ Form::label('Magasins') }}}
      {{{ Form::select('magasins[]', $magasins, 0, ['required' => 'required', 'multiple' => true, 'class' => 'select-color']) }}}
    </div>
    <div class="form-group">
      {{{ Form::submit('Insérer', ['class' => 'btn btn-primary'])}}}
    </div>
  {!! Form::close() !!}
</div>



@endsection
