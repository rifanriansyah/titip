<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('pos/beranda') }}">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">My POSit!</span>
                </a>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">My Account</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('pos/booking_locker') }}">Booking Locker</a></li>
                    <li><a href="{{ url('pos/history/' . $data->Id) }}">History</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>
