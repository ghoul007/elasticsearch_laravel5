@extends('layout.app')

@section('content')

    <div class="block">
            <form action="{{route('search_elastic')}}" method="get">
        <div class="input-group p20">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button  type="submit" class="btn btn-default" type="button">Go!</button>
            </span>
        </div>
            </form>


        <div class="flex-center  ">
            <div class="content">

                @foreach($books as $book)

                    <div class="col-md-3 col-sm-6 padd_0">
                        <div class="our-team">
                            <div class="pic">
                                <img src="http://via.placeholder.com/350x150" alt="">
                                <a href="#" class="read-more">read more</a>
                            </div>
                            <div class="team-content">
                                <h3 class="title">    {{$book["_source"]["name"] }}</h3>
                                <span class="post">    {{$book["_source"]["description"] }}</span>
                            </div>
                        </div>
                    </div>
                     
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('stylesheet')
    <style>
        .our-team {
            background: #f5f5f5;
            text-align: center;
        }

        .our-team .pic {
            position: relative;
            overflow: hidden;
            transform: scale(1);
            transition: all 0.3s ease 0s;
        }

        .our-team:hover .pic {
            transform: scale(1.01);
        }

        .our-team .pic:after {
            content: "";
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0 0 0 900px rgba(255, 255, 255, 0.5);
            position: absolute;
            bottom: -100px;
            right: -100px;
            opacity: 0;
            transform: scale3d(0.5, 0.5, 1);
            transform-origin: 50% 50% 0;
            transition: all 0.35s ease 0s;
        }

        .our-team:hover .pic:after {
            opacity: 1;
            transform: translate3d(0px, 0px, 0px);
        }

        .our-team .pic img {
            width: 100%;
            height: auto;
        }

        .our-team .read-more {
            width: 100px;
            padding: 0 15px 15px 0;
            font-size: 14px;
            color: #fff;
            letter-spacing: 0.35px;
            text-align: right;
            text-transform: uppercase;
            position: absolute;
            bottom: 0;
            right: 0;
            opacity: 0;
            z-index: 1;
            transform: translate3d(20px, 20px, 0px);
            transition: all 0.35s ease 0s;
        }

        .our-team:hover .read-more {
            opacity: 1;
            transform: translate3d(0px, 0px, 0px);
        }

        .our-team .team-content {
            padding: 20px 0;
        }

        .our-team .title {
            font-size: 22px;
            font-weight: 700;
            color: #3b3b3b;
            text-transform: capitalize;
            margin: 0 0 8px 0;
        }

        .our-team .post {
            font-size: 13px;
            font-weight: 500;
            color: #6e6e70;
            text-transform: capitalize;
        }

        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 30px;
            }
        }

        .block {
            display: flex;
            flex-direction: column;
        }

        .p20 {

            padding: 20px
        }

        .padd_0 {
            padding: 20px !important;
        }
    </style>
@endsection