dicionario = {"um": 1, "dois": 2, "tres": 3, "quatro": 4, "cinco": 5, "seis": 6,
              "sete": 7, "oito": 8, "nove": 9, "dez": 10, "onze": 11, 
              "doze": 12, "treze": 13, "catorze": 14, "quatorze": 14, 
              "quinze": 15, "dezesseis": 16, "dezessete": 17, "dezoito": 18,
              "dezenove": 19, "vinte": 20, "trinta": 30, "quarenta": 40, 
              "cinquenta": 50, "sessenta": 60,  "setenta": 70, "oitenta":80,
              "noventa": 90, "cem":100, "cento":100, "duzentos": 200, 
              "trezentos": 300, "quatrocentos": 400, "quinhentos": 500,
              "seissentos": 600, "setecentos": 700, "oitocentos": 800,
             "novecentos": 900, "mil": 1000}

palavras_proibidas = ("e", "centavos", "centavo")

def numero_por_extenso(numero_como_string):
    numero_como_string = numero_como_string.replace("real", "reais")
    if "reais" in numero_como_string:
        partes = numero_como_string.split("reais")
        valor = numero_inteiro_por_extenso(partes[0])
        if len(partes) > 1:
            valor += numero_inteiro_por_extenso(partes[1]) / 100.0
    else:
     
        valor= numero_inteiro_por_extenso (numero_como_string)/100.0
        
    return valor
    
    
def numero_inteiro_por_extenso(numero_como_string):    

    valor = 0
    lista_com_numeros = numero_como_string.split()
    lista_com_numeros = filter(lambda x: x not in palavras_proibidas,
                               lista_com_numeros)

    for palavra in lista_com_numeros:
        if palavra == "mil":
            if valor == 0:
                valor = 1000
            else:
                valor *= 1000
        else:
            valor += dicionario[palavra]
     
    return valor
