import socket

def  your_ip():
    try:
        # Cria um socket UDP
        s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
        # Conecta o socket a um endereço arbitrário (não importa)
        s.connect(("8.8.8.8", 80))
        # Obtém o endereço IP do socket
        local_ip = s.getsockname()[0]
        return local_ip
    except Exception as e:
        print("Erro ao obter o endereço IP local:", e)
        return None

local_ip = your_ip()
if local_ip:
    print("Seu endereço IP local é:", local_ip)
else:
    print("Não foi possível encontrar o endereço IP local.")
