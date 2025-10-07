import tkinter as tk
from PIL import Image, ImageTk

ventana = tk.Tk()
ventana.title("Aplicación de música")
ventana.geometry("320x300")

imagen_original = Image.open("guitarra.jpeg")
imagen_redimensionada = imagen_original.resize((200,200))
imagen_tk = ImageTk.PhotoImage(imagen_redimensionada)

etiqueta_imagen = tk.Label(ventana, image=imagen_tk)
etiqueta_imagen.pack(pady=10)

etiqueta = tk.Label(ventana, text="¡Hola, bienvenido al sitio de música!")
etiqueta.pack(pady=10)

def al_hacer_click():
    etiqueta.config(text="¡Sección guitarra!")
    
boton = tk.Button(ventana, text="Ingreso a comprar productos")
boton.pack(pady=10)

ventana.mainloop()