# coding: utf-8

import unittest
from pedrapapeltesoura import jokenpo

class TestPedraPapelTesoura(unittest.TestCase):
    def test_jogando_papel_e_papel_retorna_empate(self):
        resultado = jokenpo('papel', 'papel')
        self.assertEquals(resultado, 'empate')

    def test_jogando_pedra_e_pedra_retorna_empate(self):
        resultado = jokenpo('pedra', 'pedra')
        self.assertEquals(resultado, 'empate')
        
    def test_jogando_papel_e_pedra_retorna_papel(self):
        resultado = jokenpo('papel','pedra')
        self.assertEquals(resultado, 'papel')
    
    def test_jogando_pedra_e_tesoura_retorna_pedra(self):
        resultado = jokenpo('pedra', 'tesoura')
        self.assertEquals(resultado, 'pedra')

    def test_jogando_tesoura_e_pedra_retorna_pedra(self):
        resultado = jokenpo('tesoura', 'pedra')
        self.assertEquals(resultado, 'pedra')

    def test_jogando_tesoura_e_tesoura_retorna_empate(self):
        resultado = jokenpo('tesoura', 'tesoura')
        self.assertEquals(resultado, 'empate')

    def test_jogando_pedra_e_papel_retorna_papel(self):
        resultado = jokenpo('pedra', 'papel')
        self.assertEquals(resultado, 'papel')

    def test_jogando_tesoura_e_papel_retorna_tesoura(self):
        resultado = jokenpo('tesoura', 'papel')
        self.assertEquals(resultado, 'tesoura')

    def test_jogando_papel_e_tesoura_retorna_tesoura(self):
        resultado = jokenpo('papel', 'tesoura')
        self.assertEquals(resultado, 'tesoura')
unittest.main()
