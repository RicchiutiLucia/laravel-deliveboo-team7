
<html>
    <head>
        <title>Email di Registrazione</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background-color: #f7ae49;
                font-family: 'Open Sans', sans-serif;
                padding: 20px;
            }

            .email-card {
                width: 60%;
                margin: 0 auto;
                background-color: #fff;
                color: #212121;
                border-radius: 5px;
                padding: 12px 25px;
            }

            .image-sizing{
               
                height: 34px;
            }

            .delive-message {
                text-align: center;
            }

            .order-total {
                background-color: #f2f2f2;
                border-radius: 5px;
                padding: 15px;
                margin-top: 1.75rem;
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
            }

            @media only screen and (max-width: 600px) {
                

                .image-sizing{
                   
                    height: 24px;
                }
            }
        </style>
    </head>
    <body>
        <div class="email-card">
            <div class="message-box">
                <div class="delive-message">                                
                    <h2 style="margin-bottom: 3px;">Grazie per averci scelto!</h2>
                    <p style="font-size: .9rem; color: rgba(33,33,33,.75)">L'ordine che hai effettuato sta per essere consegnato.<br>In basso puoi consultarne il riepilogo. Buon appetito!</p>
                </div>
            </div>
            <div class="order-total">
                <div>
                    <p>Order ID: {{ $order['lead']->id }}</p>
                    <p>Name: {{ $order['lead']->name }}</p>
                    <p>Email: {{ $order['lead']->email}}</p>
                    <p>Phone: {{ $order['lead']->phone }}</p>
                    <p>Address: {{ $order['lead']->address }}</p>
                    
                <div>
                    <h3>Total: <strong>{{ $order['lead']->total_price }}€</strong></h3>
                </div>
            </div>
        </div>
        <strong>Riepilogo ordine:</strong>
        @foreach ($order['dishes'] as $item)
        <div>
            <p>🔸{{$item->name}} - {{$item->price}}€</p>
            
        </div>
        @endforeach
    </body>
</html>