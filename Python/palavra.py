import os 
print("--------------------------------------------------------------------------------------------")
print("Vamos contar quantos caracteres tem no texto que você digitou")
print("e quantas vogais!")
print("")
sua_palavra = input("Digite algo >> ") #Receber a variavel
def limpar_tela():
    os.system('cls' if os.name == 'nl' else 'clear')
def vogais(a):
    vogais = {'a':0, 'e':0, 'i':0, 'o':0, 'u':0} #Lista de vogais
    for caractere in a: #para cada caractere no texto recebido
        if caractere.lower() in vogais.keys(): #se ele estiver na lista
            vogais[caractere.lower()] += 1 #somar +1
    return vogais #retornar a lista de vogais somadas
contagem_vogais = vogais(sua_palavra)
def letra_to_letra(contagem_vogais):
    vogais = [chave for chave, valor in contagem_vogais.items() if valor > 0]
    return vogais
def vogais_quantidade(contagem_vogais):
    return sum(contagem_vogais.values())
limpar_tela()

def Resposta():
    print("Lista + numeração de vogais >>",vogais(sua_palavra)) #Mostra a lista
    print("Caracteres >> ",len(sua_palavra))#Mostra a quantidade de caracteres
    print("Vogais no texto >> ",letra_to_letra(contagem_vogais))
    print("Quantidade de vogais >> ", vogais_quantidade(contagem_vogais))
    print("--------------------------------------------------------------------------------------------")
    print("Palavra digitada >> ", sua_palavra)
    print(" ")
    print("Digite 1 para continuar e 2 para sair")
Resposta()
escolha = input("Escolha >> ")
print("")
if escolha == "1":
    while True:
        limpar_tela()
        sua_palavra = input("Digite algo >> ") #Receber a variavel
        limpar_tela()
        Resposta()
        escolha = input("Escolha >> ")
        if escolha == "2":
            break
    else:
        limpar_tela()
    