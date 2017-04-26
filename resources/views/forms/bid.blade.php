<?php
use Illuminate\Support\Facades\Input;
?>
@extends('html')
@section('content')
<div class="col-md-12">
    <h1>Новая заявка</h1>
</div>
    <div class="col-md-8">
        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <?php
          echo Form::open();
          ?>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
                        <?=Form::text('email', Input::old('email'), ['id'=>'email','class'=>'form-control','placeholder'=>'example@domain.com']);?>
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-sm-2 control-label">Сообщение</label>
		<div class="col-sm-10">
                        <?=Form::textarea('description',Input::old('description'),['id'=>'description','class'=>'form-control','rows'=>4]);?>
		</div>
	</div>
          <div class="form-group">
                <div class="col-sm-2"></div>
		<div class="col-sm-10">
                        <?=Form::submit('Отправить',['class'=>'btn btn-default']);?>
		</div>
            </div>
          <?php
          echo Form::close();
          ?>
    </div>
@stop
