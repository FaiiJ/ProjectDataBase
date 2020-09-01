@extends('Template.customer_master')
@section('title','Index')

<!--CSS-->
<link href="{{asset('css/index.css')}}" rel="stylesheet">

@section('content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <!--Admin Button-->
            <div class="col-md-3 col-sm-12" id="adminButton">
                <div class="row">
                    <div class="col-12">
                        <a href="/admin_login">
                            <img src="https://southeastasia1-mediap.svc.ms/transform/thumbnail?provider=spo&inputFormat=png&cs=fFNQTw&docid=https%3A%2F%2Fo365cmu-my.sharepoint.com%3A443%2F_api%2Fv2.0%2Fdrives%2Fb!0JfdxgL7mEWSDl6UoTXy0ABdL4PNiKxPhsHX2e6zYaVvGJq0cn9QTbMEAYgad8j2%2Fitems%2F015PQGDV4WNGMDPVINXBHITHR35XH76KBU%3Fversion%3DPublished&access_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJub25lIn0.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAvbzM2NWNtdS1teS5zaGFyZXBvaW50LmNvbUBjZjgxZjFkZi1kZTU5LTRjMjktOTFkYS1hMmRmZDA0YWE3NTEiLCJpc3MiOiIwMDAwMDAwMy0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAiLCJuYmYiOiIxNTk4OTI5MjAwIiwiZXhwIjoiMTU5ODk1MDgwMCIsImVuZHBvaW50dXJsIjoicHdGM09BdG51QzE0U3doREdSRmpIZGs5d3hxbW9UQjhSdnliUGZ2L2tQaz0iLCJlbmRwb2ludHVybExlbmd0aCI6IjExNyIsImlzbG9vcGJhY2siOiJUcnVlIiwidmVyIjoiaGFzaGVkcHJvb2Z0b2tlbiIsInNpdGVpZCI6Ill6WmtaRGszWkRBdFptSXdNaTAwTlRrNExUa3lNR1V0TldVNU5HRXhNelZtTW1RdyIsInNpZ25pbl9zdGF0ZSI6IltcImttc2lcIl0iLCJuYW1laWQiOiIwIy5mfG1lbWJlcnNoaXB8cGF0dGVlcmFfbXVAY211LmFjLnRoIiwibmlpIjoibWljcm9zb2Z0LnNoYXJlcG9pbnQiLCJpc3VzZXIiOiJ0cnVlIiwiY2FjaGVrZXkiOiIwaC5mfG1lbWJlcnNoaXB8MTAwMzIwMDA1NDFhOTEzOEBsaXZlLmNvbSIsInR0IjoiMCIsInVzZVBlcnNpc3RlbnRDb29raWUiOiIzIn0.aCtjM3pjUWpQblB3UmhnZk90TXVPN1JUeGMrQTExemV5Q2ZCNEpSR3l2WT0&encodeFailures=1&srcWidth=&srcHeight=&width=178&height=200&action=Access">
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="/admin_login" style="text-decoration: none;">
                            <h3>ADMIN</h3>
                        </a>
                    </div>
                </div>
            </div>
            <!--Customer Button-->
            <div class="col-md-3 col-sm-12" id="customerButton">
                <div class="row">
                    <div class="col-12">
                        <a href="/customer_login">
                            <img src="https://southeastasia1-mediap.svc.ms/transform/thumbnail?provider=spo&inputFormat=png&cs=fFNQTw&docid=https%3A%2F%2Fo365cmu-my.sharepoint.com%3A443%2F_api%2Fv2.0%2Fdrives%2Fb!0JfdxgL7mEWSDl6UoTXy0ABdL4PNiKxPhsHX2e6zYaVvGJq0cn9QTbMEAYgad8j2%2Fitems%2F015PQGDVY22ZUQRTMHDRDISIV5H224AE6A%3Fversion%3DPublished&access_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJub25lIn0.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAvbzM2NWNtdS1teS5zaGFyZXBvaW50LmNvbUBjZjgxZjFkZi1kZTU5LTRjMjktOTFkYS1hMmRmZDA0YWE3NTEiLCJpc3MiOiIwMDAwMDAwMy0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAiLCJuYmYiOiIxNTk4OTI5MjAwIiwiZXhwIjoiMTU5ODk1MDgwMCIsImVuZHBvaW50dXJsIjoicHdGM09BdG51QzE0U3doREdSRmpIZGs5d3hxbW9UQjhSdnliUGZ2L2tQaz0iLCJlbmRwb2ludHVybExlbmd0aCI6IjExNyIsImlzbG9vcGJhY2siOiJUcnVlIiwidmVyIjoiaGFzaGVkcHJvb2Z0b2tlbiIsInNpdGVpZCI6Ill6WmtaRGszWkRBdFptSXdNaTAwTlRrNExUa3lNR1V0TldVNU5HRXhNelZtTW1RdyIsInNpZ25pbl9zdGF0ZSI6IltcImttc2lcIl0iLCJuYW1laWQiOiIwIy5mfG1lbWJlcnNoaXB8cGF0dGVlcmFfbXVAY211LmFjLnRoIiwibmlpIjoibWljcm9zb2Z0LnNoYXJlcG9pbnQiLCJpc3VzZXIiOiJ0cnVlIiwiY2FjaGVrZXkiOiIwaC5mfG1lbWJlcnNoaXB8MTAwMzIwMDA1NDFhOTEzOEBsaXZlLmNvbSIsInR0IjoiMCIsInVzZVBlcnNpc3RlbnRDb29raWUiOiIzIn0.aCtjM3pjUWpQblB3UmhnZk90TXVPN1JUeGMrQTExemV5Q2ZCNEpSR3l2WT0&encodeFailures=1&srcWidth=&srcHeight=&width=178&height=200&action=Access">
                        </a>
                    </div>
                    <div class="col-12">
                        <a href="/customer_login" style="text-decoration: none;">
                            <h3>CUSTOMER</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
</article>


@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>