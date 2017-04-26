 @if(isset($data->id))
        <div class="col-md-12">
        <div class="bid">
            <span>
                У вас уже есть заявка.<br/>
                Номер заявки: {{$data->id}}
                @if($data->description)
                    <p>Сообщение: {{$data->description}}</p>
                @endif
            </span>
        </div>
        </div>
    @endif