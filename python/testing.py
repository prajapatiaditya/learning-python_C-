def linear_search(arr, target):
    for i in range(len(arr)):
        if arr[i] == target:
            return i
    return  "not  found"

# Example
arr = [10, 20, 30, 40, 50]
target = 45
print(linear_search(arr, target)) 