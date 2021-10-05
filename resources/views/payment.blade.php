@extends('layouts.app')

@section('content')

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
      src="https://www.paypal.com/sdk/js?client-id=AcTOOq1MtB1lBy89V9Xb-6RGfIfWUA-0mJvisKPgGhIbpoQyVwtM8F7bvv9UBiKM37Dhm8lccuEDKsQL&vault=true&intent=subscription">
  </script>

   <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons({

  createSubscription: function(data, actions) {

    return actions.subscription.create({

      'plan_id': 'P-8N478805CC8223824MFKBYQA'

    });

  },


  onApprove: function(data, actions) {

         alert('You have successfully created subscription ' + data.subscriptionID);

         // $.ajax({
         //            url: "{{ route('payment.store.store') }}",
         //            type:'POST',
         //            data: {_token:_token, email:email, pswd:pswd,address:address},
         //            success: function(data) {
         //              printMsg(data);
         //            }
         //        });

  }


}).render('#paypal-button-container');
  </script>
</body>
@endsection
