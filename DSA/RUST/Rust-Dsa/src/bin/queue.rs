use std::fmt::Debug;

fn main() {
    let mut s1: Queue<i64> = Queue::new(10);
    Queue::<i64>::process_instruction::<&str, &str>(s1.enque(5));
    Queue::<i64>::process_instruction::<&str, &str>(s1.enque(8));
    Queue::<i64>::process_instruction::<&str, &str>(s1.enque(10));

    s1.display().unwrap();
    Queue::<i64>::process_instruction::<i64, &str>(s1.deque());
    s1.display().unwrap();
}

#[derive(Debug)]
struct Queue<T: Debug> {
    queue: Vec<T>,
    capacity: i64,
}

impl<T: Debug> Queue<T> {
    fn new(capacity: i64) -> Self {
        Self {
            queue: Vec::with_capacity(capacity as usize),
            capacity: capacity,
        }
    }

    fn enque(&mut self, data: T) -> Result<&str, &str> {
        if self.queue.len() as i64 <= self.capacity {
            self.queue.push(data);
            Ok("Data inserted to Queue")
        } else {
            Err("Queue OVERFLOW!")
        }
    }

    fn deque(&mut self) -> Result<T, &str> {
        if self.queue.len() > 0 {
            Ok(self.queue.remove(0))
        } else {
            Err("Queue UNDERFLOW!")
        }
    }

    fn display(&self) -> Result<(), &str> {
        if self.queue.len() == 0 {
            Err("Queue EMPTY!")
        } else {
            let line = "-------";
            for i in self.queue.iter() {
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
    fn test_enque() {
        let mut s: Queue<u32> = Queue::new(5);
        assert_eq!(Ok("Data inserted to Queue"), s.enque(3));
    }
    #[test]
    fn test_Queue_underflow() {
        let mut s: Queue<u8> = Queue::new(1);
        assert_eq!(s.deque(), Err("Queue UNDERFLOW!"));
    }
    #[test]
    fn test_Queue_overflow() {
        let mut s: Queue<u8> = Queue::new(1);

        s.enque(1).unwrap();
        s.enque(10).unwrap();
        assert_eq!(s.enque(5), Err("Queue OVERFLOW!"));
    }
    #[test]
    fn test_display() {
        let mut s: Queue<u8> = Queue::new(1);
        assert_eq!(s.display(), Err("Queue EMPTY!"));
    }
}
