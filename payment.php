<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> -->
    <script src="https://kit.fontawesome.com/d3c6e66500.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="payment_style.css">

</head>

<body>

    <!--payment methods-->
    <div class="container py-5 px-5 text-light">
        <h1>Payment methods</h1>
    </div>

    <!--container-->
    <div class="container px-5 py-2">
        <div class="row">

            <!--buttons-->
            <div class="col-4 text-center">
                <div class="button">
                    <a href="#" class="btn btn-light button-item" style="background-color: red; color:white">
                        <div>
                            <i class="fab fa-cc-visa fa-lg"></i><span>Master/Visa</span>
                        </div>
                    </a>
                </div><br><br>

                <div class="button">
                    <a href="#" class="btn btn-light button-item">
                        <div>
                            <i class="fas fa-credit-card fa-lg"></i><span>Credit Card</span>
                        </div>
                    </a>
                </div> <br><br>

                <div class="button">
                    <a href="#" class="btn btn-light button-item">
                        <div>
                            <i class="fab fa-cc-paypal fa-lg"></i><span>Paypal Card</span>
                        </div>
                    </a>
                </div><br><br>

                <div class="button">
                    <a href="#" class="btn btn-light button-item">
                        <div>
                            <i class="far fa-money-bill-alt fa-lg"></i><span>Money Pay</span>
                        </div>
                    </a>
                </div>

            </div>

            <!--card-->
            <div class="col-8">
                <!--form-->
                <form action="">
                    <div class="card text-dark bg-light mb-3">
                        <!--name-->
                        <div class="row">
                            <div class="col-12">
                                <div class="m-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                        </div>
                        <!--cardno-->
                        <div class="row">
                            <div class="col-12">
                                <div class="m-3">
                                    <label for="card_no" class="form-label">Card No:</label>
                                    <input type="text" class="form-control" id="card_no" name="card_no" placeholder="Enter your card number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--expires-->
                            <div class="col-6">
                                <div class="m-3">
                                    <label for="expires" class="form-label">Expires:</label>
                                    <input type="text" class="form-control" id="expires" name="expires" placeholder="Enter your expiry date">
                                </div>
                            </div>
                            <!--CVV-->
                            <div class="col-6">
                                <div class="m-3">
                                    <label for="cvv" class="form-label">CVV:</label>
                                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter your CVV">
                                </div>
                            </div>
                        </div>

                    </div>

            </div>
        </div>

        <!--proceed-->
        <div class="row py-5">
            <div class="col 3"></div>
            <div class="col 3">
                <div class="proceed_button">
                    <a href="#" class="btn btn-danger  proceed_item" type="submit" id="submit" name="submit">Proceed</a>
                </div>
                </form>
            </div>
            <div class="col 3"></div>
            <div class="col 3"></div>
        </div>

        <script>
            let btn = document.getElementsByClassName('button');

            /* master/visa */
            btn[0].addEventListener('click', () => {
                let btn_item = document.getElementsByClassName('button-item');
                btn_item[0].style.color = 'white';
                btn_item[0].style.backgroundColor = 'red';

                btn_item[1].style.color = 'black';
                btn_item[1].style.backgroundColor = 'white';
                btn_item[2].style.color = 'black';
                btn_item[2].style.backgroundColor = 'white';
                btn_item[3].style.color = 'black';
                btn_item[3].style.backgroundColor = 'white';
            })

            /* credit card */
            btn[1].addEventListener('click', () => {
                let btn_item = document.getElementsByClassName('button-item');
                btn_item[1].style.color = 'white';
                btn_item[1].style.backgroundColor = 'red';

                btn_item[0].style.color = 'black';
                btn_item[0].style.backgroundColor = 'white';
                btn_item[2].style.color = 'black';
                btn_item[2].style.backgroundColor = 'white';
                btn_item[3].style.color = 'black';
                btn_item[3].style.backgroundColor = 'white';
            })

            /* paypal card */
            btn[2].addEventListener('click', () => {
                let btn_item = document.getElementsByClassName('button-item');
                btn_item[2].style.color = 'white';
                btn_item[2].style.backgroundColor = 'red';

                btn_item[0].style.color = 'black';
                btn_item[0].style.backgroundColor = 'white';
                btn_item[1].style.color = 'black';
                btn_item[1].style.backgroundColor = 'white';
                btn_item[3].style.color = 'black';
                btn_item[3].style.backgroundColor = 'white';
            })

            /* money pay */
            btn[3].addEventListener('click', () => {
                let btn_item = document.getElementsByClassName('button-item');
                btn_item[3].style.color = 'white';
                btn_item[3].style.backgroundColor = 'red';

                btn_item[0].style.color = 'black';
                btn_item[0].style.backgroundColor = 'white';
                btn_item[1].style.color = 'black';
                btn_item[1].style.backgroundColor = 'white';
                btn_item[2].style.color = 'black';
                btn_item[2].style.backgroundColor = 'white';
            })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>