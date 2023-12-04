<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione o atendimento</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Selecione o Atendimento</b></legend>
                <br>
                                  <a class='btn btn-primary'  data-toogle="tooltip" title="Suporte" href='suporte.php'>

                                  	<svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 20 20' height='48px' viewBox='0 0 20 20' width='48px' fill='#000000'><g><rect fill='none' height='20' width='20'/></g><g><g><rect height='5.5' transform='matrix(0.7071 -0.7071 0.7071 0.7071 -5.3383 13.8538)' width='2' x='13.05' y='10.62'/><path d='M14.23,8.98c1.38,0,2.5-1.12,2.5-2.5c0-0.51-0.15-0.98-0.42-1.38l-2.08,2.08l-0.71-0.71l2.08-2.08 c-0.4-0.26-0.87-0.42-1.38-0.42c-1.38,0-2.5,1.12-2.5,2.5c0,0.32,0.07,0.63,0.18,0.91L10.69,8.6L9.64,7.54l0.71-0.71L8.93,5.42 L10.34,4C9.56,3.22,8.29,3.22,7.51,4L4.69,6.83l1.06,1.06l-2.13,0L3.27,8.24l2.83,2.83l0.35-0.35L6.46,8.6l1.06,1.06l0.71-0.71 l1.06,1.06l-4.6,4.6l1.41,1.41l7.22-7.22C13.6,8.91,13.91,8.98,14.23,8.98z'/></g></g></svg>
                                  </a>
                                  <a class='btn btn-primary'data-toogle="tooltip" title="Agendamento de instalção" href='instalacao.php'>

                                  	<svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 20 20' height='48px' viewBox='0 0 20 20' width='48px' fill="#000000"><rect fill='none' height='20' width='20'/><path d='M9.5,18h-5C3.67,18,3,17.32,3,16.5v-11C3,4.68,3.67,4,4.5,4H6V2h1.5v2h5V2H14v2h1.5C16.33,4,17,4.68,17,5.5V10h-1.5V9h-11 v7.5h5V18z M17.78,13.99l0.65-0.65c0.29-0.29,0.29-0.77,0-1.06l-0.71-0.71c-0.29-0.29-0.77-0.29-1.06,0l-0.65,0.65L17.78,13.99z M17.19,14.58L12.77,19H11v-1.77l4.42-4.42L17.19,14.58z'/></svg>
                                  </a>
                                    <a class='btn btn-primary'  data-toogle="tooltip" title="Caixa de sugestões" href='sugestao.php'>


                                    <svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 20 20' height='48px' viewBox='0 0 20 20' width='48px' fill="#000000"><rect fill='none' height='20' width='20'/><path d='M15.35,8.83l0.71-0.71c0.59-0.59,0.59-1.54,0-2.12L15,4.94c-0.59-0.59-1.54-0.59-2.12,0l-0.71,0.71L15.35,8.83z M12.17,9.89 L6.56,15.5H5.5v-1.06l5.61-5.61L12.17,9.89z M11.11,6.71L4,13.82V17h3.18l7.11-7.11L11.11,6.71L11.11,6.71z M4.51,11.18 C3.59,10.76,3,10.16,3,9.25c0-1.31,1.39-1.99,2.61-2.59C6.45,6.24,7.5,5.73,7.5,5.25C7.5,4.91,6.83,4.5,6,4.5 c-0.94,0-1.36,0.46-1.38,0.48C4.35,5.29,3.88,5.33,3.57,5.07C3.26,4.81,3.21,4.35,3.46,4.03C3.55,3.93,4.34,3,6,3 c1.47,0,3,0.84,3,2.25C9,6.66,7.55,7.37,6.27,8C5.56,8.35,4.5,8.87,4.5,9.25c0,0.3,0.48,0.56,1.17,0.78L4.51,11.18z M14.14,12.16 c0.83,0.48,1.36,1.14,1.36,2.09c0,1.94-2.44,2.75-3.75,2.75C11.34,17,11,16.66,11,16.25s0.34-0.75,0.75-0.75 c0.77,0,2.25-0.49,2.25-1.25c0-0.39-0.38-0.71-0.97-0.97L14.14,12.16z'/></svg>
                                  </a>
                                <a class='btn btn-primary'  data-toogle="tooltip" title="Acompanhar Suporte" href='lista.php'>


                                    <svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 20 20' height='48px' viewBox='0 0 20 20' width='48px' fill='#000000'><rect fill='none' height='20' width='20'/><path d='M16.44,15.38C16.79,14.84,17,14.19,17,13.5c0-1.93-1.57-3.5-3.5-3.5S10,11.57,10,13.5s1.57,3.5,3.5,3.5 c0.69,0,1.34-0.21,1.88-0.56L17.94,19L19,17.94L16.44,15.38z M13.5,15.5c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S14.6,15.5,13.5,15.5z M17.78,2L19,2.87l-3.88,5.9h0C14.61,8.59,14.07,8.5,13.5,8.5L17.78,2z M13.5,8.5c-0.58,0-1.13,0.1-1.65,0.28l0,0l-0.78-1.1 l-3.41,5.36l-2.48-2.97l-2.96,4.81L1,14l4-6.5l2.5,3L11,5L13.5,8.5z'/>
                                    </svg>
                                    
                                </a>
                                <a class='btn btn-primary'  data-toogle="tooltip" title="Acompanhar instalação" href='lista_instalacao.php'>


                                    <svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 20 20' height='48px' viewBox='0 0 20 20' width='48px' fill="#000000"><rect fill='none' height='20' width='20'/><path d='M9,7.5H2V6h7V7.5z M9,12.5H2V14h7V12.5z M11.64,5.11l-1.06,1.06L13.4,9L18,4.4l-1.06-1.06L13.4,6.88L11.64,5.11z M11.64,11.61l-1.06,1.06l2.83,2.83l4.6-4.6l-1.06-1.06l-3.54,3.54L11.64,11.61z'/></svg>

                                    
                                </a>

                                <a class='btn btn-primary'  data-toogle="tooltip" title="Localizar cliente" href='lista_geral.php'>


                                    <svg xmlns='http://www.w3.org/2000/svg' height='48' width='48'><path d='m39.55 41.1-13-12.95q-1.5 1.3-3.475 2.025-1.975.725-4.125.725-5.1 0-8.625-3.525Q6.8 23.85 6.8 18.8q0-5 3.525-8.525Q13.85 6.75 18.9 6.75q5.05 0 8.575 3.525Q31 13.8 31 18.8q0 2.1-.725 4.1-.725 2-2.075 3.6l13 12.95Zm-20.6-12.45q4.05 0 6.9-2.875Q28.7 22.9 28.7 18.8t-2.85-6.95Q23 9 18.95 9q-4.15 0-7 2.85Q9.1 14.7 9.1 18.8t2.85 6.975q2.85 2.875 7 2.875Z'/>
                                    </svg>


                                    
                                </a>     
  
			  </fieldset>
        </form>
    </div>
</body>
</html>