@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 bg-dark-100 p-4" style="height: 100vh">
                <h5 class="font-weight-bold mb-3">Chats</h5>

                <div class="chat-list">
                    <p class="bg-grey-100 dark p-2 font-weight-bold radius-10"><i class="fa fa-envelope" aria-hidden="true"></i> Dance Group</p>
                </div>
            </div>

            <div class="col-lg-9 p-3">

                <h2 class="dark font-weight-bold mt-3 mb-3"><i class="fa fa-sticky-note" aria-hidden="true"></i> Thread</h2>

                <div>

                    <div class="bg-grey-100 radius-10 dark mb-3 p-3" style="height:75vh">

                        <div class="bg-grey-50 radius-10 p-2 mb-2">
                            <h5 class="badge bg-primary t-15 p-2"><i class="fa fa-hand-peace-o mr-1" aria-hidden="true"></i> Almae Hangad</h5>
                            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to</p>
                        </div>

                    </div>

                    <div class="d-flex">
                            <input type="text" class="form-control mr-4" name="message" placeholder="Type Message Here..." required>
                            <button class="btn bg-secondary"><i class="fa fa-telegram mr-2" aria-hidden="true"></i> Send</button>
                    </div>

                </div>

            </div>
        </div>
        </div>

@endsection