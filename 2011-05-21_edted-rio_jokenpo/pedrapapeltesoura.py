# coding: utf-8
# dojorio.org

def jokenpo(jogada1, jogada2):
    if jogada1 == jogada2:
        return "empate"
        
    regras = {
        ('tesoura', 'pedra'): 'pedra',
        ('pedra', 'papel'): 'papel',
        ('papel', 'tesoura'): 'tesoura',
    }
    
    if (jogada1, jogada2) in regras:
        return regras[(jogada1, jogada2)]
    else:
        return regras[(jogada2, jogada1)]     
    return resultado
