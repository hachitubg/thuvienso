@section('mainmenu')
<div id="mainmenu">
    <div id="menucontact" style="width: 1140px; margin: auto; position: relative;">
        <div style="width: 220px; padding-top: 75px;">
            <div style="position: relative; float: left; z-index: 10; bottom: 16px;"></div>
            <p style="height: 32px; background: #f4f4f4; cursor: pointer; border-radius: 5px;" class="dropdown-toggle">
                &nbsp;<span><img src="{{ url('image/tảixuống.png') }}" alt="" style="height: 20px; width: 20px; line-height: 32px;"></span>&nbsp;
                <b style="line-height: 32px;">THỂ LOẠI SÁCH</b>
            </p>
            <ul id="ulmenu" style="background: #f7f7f7; border-radius: 5px; height: 0; overflow: hidden; transition: height 0.3s ease;">
                @foreach($theloai as $theloai10)
                    <li class="child"><a href="{{ url('theloai', ['id' => $theloai10->id]) }}" class="first">{{ $theloai10->tentheloai }}</a></li>
                @endforeach
            </ul>
            
            <p style="height: 32px; background: #f4f4f4; cursor: pointer; border-radius: 5px; margin-top: 10px;" class="dropdown-toggle">
                &nbsp;<span><img src="{{ url('image/tảixuống.png') }}" alt="" style="height: 20px; width: 20px; line-height: 32px;"></span>&nbsp;
                <b style="line-height: 32px;">SÁCH THEO NGÀNH</b>
            </p>
            <ul id="ulmenu2" style="background: #f7f7f7; border-radius: 5px; height: 0; overflow: hidden; transition: height 0.3s ease;">
                @foreach($nxb as $nganh10)
                    <li class="child"><a href="{{ url('nganh', ['id' => $nganh10->id]) }}" class="first">{{ $nganh10->tennxb }}</a></li>
                @endforeach
            </ul>
        </div>
        
        <div style="float: right; height: 32px; position: absolute; right: 1px; top: 5px;">
            <span><img src="{{ url('image/552489.png') }}" style="width: 25px; height: 20px; padding-right: 5px;"></span>
            <b>Hotline:<span style="font-weight: bold; color: Black;"> 0326 347 291</span></b>
        </div>
    </div>
</div>

<style>
    /* Dropdown Style */
    .dropdown-toggle:hover {
        background-color: #e0e0e0;
    }

    #ulmenu, #ulmenu2 {
        list-style-type: none;
        padding-left: 0;
        margin: 0;
    }

    #ulmenu li, #ulmenu2 li {
        padding: 8px 16px;
    }

    #ulmenu li a, #ulmenu2 li a {
        text-decoration: none;
        color: #333;
    }

    #ulmenu li a:hover, #ulmenu2 li a:hover {
        color: #ff5722;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle dropdown for THỂ LOẠI SÁCH
        const toggleMenu1 = document.querySelectorAll('.dropdown-toggle')[0];
        const ulMenu1 = document.getElementById('ulmenu');
        toggleMenu1.addEventListener('click', function() {
            const isExpanded = ulMenu1.style.height === '0px' || ulMenu1.style.height === '';
            ulMenu1.style.height = isExpanded ? ulMenu1.scrollHeight + 'px' : '0px';
        });

        // Handle dropdown for SÁCH THEO NGÀNH
        const toggleMenu2 = document.querySelectorAll('.dropdown-toggle')[1];
        const ulMenu2 = document.getElementById('ulmenu2');
        toggleMenu2.addEventListener('click', function() {
            const isExpanded = ulMenu2.style.height === '0px' || ulMenu2.style.height === '';
            ulMenu2.style.height = isExpanded ? ulMenu2.scrollHeight + 'px' : '0px';
        });
    });
</script>
@endsection
