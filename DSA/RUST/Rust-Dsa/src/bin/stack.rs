use std::fmt::Debug;

fn main() {
    let mut s1: Stack<i64> = Stack::new(1);
    Stack::<i64>::process_instruction::<&str, &str>(s1.push(5));
    Stack::<i64>::process_instruction::<&str, &str>(s1.push(8));
    Stack::<i64>::process_instruction::<&str, &str>(s1.push(10));
    s1.display();
}

#[derive(Debug)]
struct Stack<T: Debug> {
    stack: Vec<T>,
    capacity: i64,
}

impl<T: Debug> Stack<T> {
    fn new(capacity: i64) -> Self {
        Self {
            stack: Vec::with_capacity(capacity as usize),
            capacity: capacity,
        }
    }

    fn push(&mut self, data: T) -> Result<&str, &str> {
        if self.stack.len() as i64 <= self.capacity {
            self.stack.push(data);
            Ok("Data pushed to stack")
        } else {
            Err("STACK OVERFLOW!")
        }
    }

    fn pop(&mut self) -> Result<T, &str> {
        if self.stack.len() > 0 {
            Ok(self.stack.pop().unwrap())
        } else {
            Err("STACK UNDERFLOW!")
        }
    }

    fn display(&self) -> Result<(), &str> {
        if self.stack.len() == 0 {
            Err("STACK EMPTY!")
        } else {
            let line = "-------";
            for i in self.stack.iter().rev() {
                println!("{}", line);
                println!("   {:?}", i);
            }
            println!("{}", line);
            Ok(())
        }
    }

    fn process_instruction<U: Debug, E: Debug>(instruction: Result<U, E>) {
        match instruction {
            Ok(data) => println!("{:?}", data),
            Err(t) => println!("{:?}", t),
        }
    }
}

#[cfg(test)]
mod tests {
    use super::*;
    #[test]
    fn test_push() {
        let mut s: Stack<u32> = Stack::new(5);
        assert_eq!(Ok("Data pushed to stack"), s.push(3));
    }
    #[test]
    fn test_stack_underflow() {
        let mut s: Stack<u8> = Stack::new(1);
        assert_eq!(s.pop(), Err("STACK UNDERFLOW!"));
    }
    #[test]
    fn test_stack_overflow() {
        let mut s: Stack<u8> = Stack::new(1);

        s.push(1).unwrap();
        s.push(10).unwrap();
        assert_eq!(s.push(5), Err("STACK OVERFLOW!"));
    }
    #[test]
    fn test_display() {
        let mut s: Stack<u8> = Stack::new(1);
        assert_eq!(s.display(), Err("STACK EMPTY!"));
    }
}
