<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('first_name') }}
            {{ Form::text('first_name', $character->first_name, ['class' => 'form-control' . ($errors->has('first_name') ? ' is-invalid' : ''), 'placeholder' => 'First Name']) }}
            {!! $errors->first('first_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $character->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gender') }}
            {{ Form::text('Gender', $character->Gender, ['class' => 'form-control' . ($errors->has('Gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('Gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Age') }}
            {{ Form::text('Age', $character->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $character->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('State') }}
            {{ Form::text('State', $character->State, ['class' => 'form-control' . ($errors->has('State') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('State', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('country') }}
            {{ Form::text('country', $character->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('character') }}
            {{ Form::text('character', $character->character, ['class' => 'form-control' . ($errors->has('character') ? ' is-invalid' : ''), 'placeholder' => 'Character']) }}
            {!! $errors->first('character', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comic') }}
            {{ Form::text('comic', $character->comic, ['class' => 'form-control' . ($errors->has('comic') ? ' is-invalid' : ''), 'placeholder' => 'Comic']) }}
            {!! $errors->first('comic', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>