<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advice App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 8px; 
            margin-top: 25px;
        }

        #advice {
            color: #007bff;
            font-style: italic; /* Make it italic */
            font-family: 'Times New Roman', Times, serif; /* Change font family */
        }

        #getAdvice {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    

    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-4 text-center mb-3" id="advice">Waiting...</h1>
            <a class="btn btn-link btn-lg my-3" id="getAdvice">Thank You, Next!</a>
        </div>
        <hr />
        <div id="adviceOutput"></div>
    </div>

    <!-- Bootstrap JS and Axios -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        const adviceEndpoint = 'https://api.adviceslip.com/advice';

        window.addEventListener('load', getAdvice);

        function getAdvice() {
            axios.get(adviceEndpoint).then(response => {
                showAdvice(response);
                return response;
            }).catch(error => {
                const response = {
                    data: {
                        slip: {
                            advice: 'Unable to fetch advice at the moment.',
                        }
                    }
                };
                showAdvice(response);
                console.error(error);
            });
        }

        function showAdvice(response) {
            const container = document.querySelector('#advice');
            container.innerHTML = `"${response.data.slip.advice}"`;

            const outputDiv = document.querySelector('#adviceOutput');
            outputDiv.innerHTML = '';
        }

        document.querySelector('#getAdvice').addEventListener('click', getAdvice);
    </script>
</body>
</html>
