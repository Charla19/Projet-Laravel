@extends('blank')

@section('main-content')

<div class="br-chatpanel-body">
    <div class="br-chat-header">
      <div class="br-img-user"><img src="../img/img2.jpg" alt=""></div>
      <div class="chat-name">
        <h6>Reynante Labares</h6>
        <small>Last seen: 2 minutes ago</small>
      </div>
      <nav class="nav">
        <a href="#" class="nav-link"><i class="icon ion-android-more-vertical"></i></a>
        <a href="#" class="nav-link"><i class="icon ion-ios-telephone-outline"></i></a>
        <a href="#" class="nav-link"><i class="icon ion-ios-videocam-outline"></i></a>
        <a href="#" class="nav-link"><i class="icon ion-ios-trash-outline"></i></a>
        <a href="#" class="nav-link"><i class="icon ion-ios-information-outline"></i></a>
      </nav>
    </div><!-- br-msg-header -->
    <div class="br-chat-body">
      <div class="content-inner">
        <label class="chat-time"><span>3 days ago</span></label>
        <div class="media flex-row-reverse">
          <div class="br-img-user online"><img src="../img/img5.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
            </div><!-- msg-wrapper -->
            <div class="msg-wrapper">rhoncus ut, imperdiet a, venenatis vitae, justo...</div>
            <div class="msg-wrapper pd-0-force">
              <img src="../img/img18.jpg" class="wd-200" alt="">
            </div><!-- msg-wrapper -->
            <div><span>9:48 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media">
          <div class="br-img-user online"><img src="../img/img2.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            </div><!-- msg-wrapper -->
            <div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media flex-row-reverse">
          <div class="br-img-user online"><img src="../img/img5.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Nullam dictum felis eu pede mollis pretium
            </div><!-- msg-wrapper -->
            <div><span>11:22 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
        <label class="chat-time"><span>Yesterday</span></label>
        <div class="media">
          <div class="br-img-user online"><img src="../img/img2.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            </div><!-- msg-wrapper -->
            <div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media flex-row-reverse">
          <div class="br-img-user online"><img src="../img/img5.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            </div><!-- msg-wrapper -->
            <div class="msg-wrapper">
              Nullam dictum felis eu pede mollis pretium
            </div><!-- msg-wrapper -->
            <div><span>9:48 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->

        <label class="chat-time"><span>Today</span></label>
        <div class="media">
          <div class="br-img-user online"><img src="../img/img2.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Maecenas tempus, tellus eget condimentum rhoncus
            </div><!-- msg-wrapper -->
            <div class="msg-wrapper">
              Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
            </div><!-- msg-wrapper -->
            <div><span>10:12 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
        <div class="media flex-row-reverse">
          <div class="br-img-user online"><img src="../img/img5.jpg" alt=""></div>
          <div class="media-body">
            <div class="msg-wrapper">
              Maecenas tempus, tellus eget condimentum rhoncus
            </div><!-- msg-wrapper -->
            <div class="msg-wrapper">
              Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
            </div><!-- msg-wrapper -->
            <div><span>09:40 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a></div>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- content-inner -->
    </div><!-- br-chat-body -->
    <div class="br-chat-footer">
      <nav class="nav">
        <a href="#" class="nav-link"><i class="icon ion-ios-camera-outline"></i></a>
        <a href="#" class="nav-link"><i class="icon ion-ios-mic-outline"></i></a>
      </nav>
      <div><input type="text" class="form-control" placeholder="Ecrivez votre message..."></div>
      <nav class="nav">
        <a href="#" class="nav-link"><i class="icon ion-paper-airplane tx-22"></i></a>
      </nav>
    </div><!-- br-chat-footer -->
  </div><!-- br-chatpanel-body -->

@endsection