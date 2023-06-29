

<!DOCTYPE html>
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

            .img-container {
                padding: 12px 20px;
                text-align: center;
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
                padding: 12px;
                margin-top: 1.75rem;
                display: flex;
                justify-content: space-between;
                align-items: flex-end;
            }

            @media only screen and (max-width: 600px) {
                .email-card {
                    width: 100%;
                }

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
                    <h2 style="margin-bottom: 3px;">Hai ricevuto un nuovo ordine!</h2>
                    <p style="font-size: .9rem; color: rgba(33,33,33,.75)">Accendi i fornelli, hai un nuovo ordine da preparare!<br>In basso puoi consultare il riepilogo:</p>
                </div>
                <div>
                    <p>Order ID: {{ $order->id }}</p>
                    <p>Name: {{ $order->name }}</p>
                    <p>Email: {{ $order->email}}</p>
                    <p>Phone: {{ $order->phone }}</p>
                    <p>Address: {{ $order->address }}</p>
                    
                <div>
            </div>
            <div class="order-total">
                <div>
                    <h3>Totale: <strong>{{ $order->total_price }}€</strong></h3>
                </div>
            </div>
        </div>
    </body>
</html>