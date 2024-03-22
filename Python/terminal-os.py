import os #IMPORTANDO O MÓDULO

print("Será apenas uma brincadeira com o módulo 'os' do Python")
print("Será um programa que usa seu terminal/cmd")
#É basicamente um terminal que você roda em um arquivo python
lock_terminal = True # Cadear o while até determinado ambiente
print("MODELO : nome@host")
print(" ")
#Estilização do terminal
nome = input("Nome >> ")
host = input("Host >> ")
#Fim da estilização do terminal


def index(lock_terminal, nome, host): # Corpo do programa
     while lock_terminal:
      comando = input(nome+"@"+host+" >> ") #Onde você dará comandos
      if comando == "exit": #Sair do programa
            lock_terminal = False
      else:
        call_terminal(comando)

def call_terminal(comando): # Função que permite o uso do terminal
        os.system('cls' if os.name == 'nt' else comando) # <- 
index(lock_terminal, nome, host) #Chamando o corpo