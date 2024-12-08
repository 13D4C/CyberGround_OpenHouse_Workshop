def shift_text(text):
  shifted_text = ""
  shift = 5
  for char in text:
    if 'a' <= char <= 'z':
      shifted_text += chr(((ord(char) - ord('a') + shift) % 26) + ord('a'))
    elif 'A' <= char <= 'Z':
      shifted_text += chr(((ord(char) - ord('A') + shift) % 26) + ord('A'))
    else:
      shifted_text += char
  return shifted_text

# พี่อยากให้เราทำให้ข้อความกลายเป็น ITLadkrabangOpenhouse
output = "NYQfipwfgfslTujsmtzxj"
result = shift_text(output)
print(result)